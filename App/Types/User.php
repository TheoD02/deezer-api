<?php


namespace App\Types;


class User
{
    private int $id;
    private string $name;
    private string $lastname;
    private string $firstname;
    private string $email;
    private int $status;
    private string $birthday;
    private string $inscription_date;
    private string $gender;
    private string $link;
    private string $picture;
    private string $picture_small;
    private string $picture_medium;
    private string $picture_big;
    private string $picture_xl;
    private string $country;
    private string $lang;
    private bool $is_kid;
    private string $explicit_content_level;
    private array $explicit_content_levels_available;
    private string $tracklist;
    private string $type;

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     *
     * @return User
     */
    public function setType(string $type): User
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     *
     * @return User
     */
    public function setId(int $id): User
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return User
     */
    public function setName(string $name): User
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getLastname(): string
    {
        return $this->lastname;
    }

    /**
     * @param string $lastname
     *
     * @return User
     */
    public function setLastname(string $lastname): User
    {
        $this->lastname = $lastname;
        return $this;
    }

    /**
     * @return string
     */
    public function getFirstname(): string
    {
        return $this->firstname;
    }

    /**
     * @param string $firstname
     *
     * @return User
     */
    public function setFirstname(string $firstname): User
    {
        $this->firstname = $firstname;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     *
     * @return User
     */
    public function setEmail(string $email): User
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return int
     */
    public function getStatus(): int
    {
        return $this->status;
    }

    /**
     * @param int $status
     *
     * @return User
     */
    public function setStatus(int $status): User
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return string
     */
    public function getBirthday(): string
    {
        return $this->birthday;
    }

    /**
     * @param string $birthday
     *
     * @return User
     */
    public function setBirthday(string $birthday): User
    {
        $this->birthday = $birthday;
        return $this;
    }

    /**
     * @return string
     */
    public function getInscriptionDate(): string
    {
        return $this->inscription_date;
    }

    /**
     * @param string $inscription_date
     *
     * @return User
     */
    public function setInscriptionDate(string $inscription_date): User
    {
        $this->inscription_date = $inscription_date;
        return $this;
    }

    /**
     * @return string
     */
    public function getGender(): string
    {
        return $this->gender;
    }

    /**
     * @param string $gender
     *
     * @return User
     */
    public function setGender(string $gender): User
    {
        $this->gender = $gender;
        return $this;
    }

    /**
     * @return string
     */
    public function getLink(): string
    {
        return $this->link;
    }

    /**
     * @param string $link
     *
     * @return User
     */
    public function setLink(string $link): User
    {
        $this->link = $link;
        return $this;
    }

    /**
     * @return string
     */
    public function getPicture(): string
    {
        return $this->picture;
    }

    /**
     * @param string $picture
     *
     * @return User
     */
    public function setPicture(string $picture): User
    {
        $this->picture = $picture;
        return $this;
    }

    /**
     * @return string
     */
    public function getPictureSmall(): string
    {
        return $this->picture_small;
    }

    /**
     * @param string $picture_small
     *
     * @return User
     */
    public function setPictureSmall(string $picture_small): User
    {
        $this->picture_small = $picture_small;
        return $this;
    }

    /**
     * @return string
     */
    public function getPictureMedium(): string
    {
        return $this->picture_medium;
    }

    /**
     * @param string $picture_medium
     *
     * @return User
     */
    public function setPictureMedium(string $picture_medium): User
    {
        $this->picture_medium = $picture_medium;
        return $this;
    }

    /**
     * @return string
     */
    public function getPictureBig(): string
    {
        return $this->picture_big;
    }

    /**
     * @param string $picture_big
     *
     * @return User
     */
    public function setPictureBig(string $picture_big): User
    {
        $this->picture_big = $picture_big;
        return $this;
    }

    /**
     * @return string
     */
    public function getPictureXl(): string
    {
        return $this->picture_xl;
    }

    /**
     * @param string $picture_xl
     *
     * @return User
     */
    public function setPictureXl(string $picture_xl): User
    {
        $this->picture_xl = $picture_xl;
        return $this;
    }

    /**
     * @return string
     */
    public function getCountry(): string
    {
        return $this->country;
    }

    /**
     * @param string $country
     *
     * @return User
     */
    public function setCountry(string $country): User
    {
        $this->country = $country;
        return $this;
    }

    /**
     * @return string
     */
    public function getLang(): string
    {
        return $this->lang;
    }

    /**
     * @param string $lang
     *
     * @return User
     */
    public function setLang(string $lang): User
    {
        $this->lang = $lang;
        return $this;
    }

    /**
     * @return bool
     */
    public function isIsKid(): bool
    {
        return $this->is_kid;
    }

    /**
     * @param bool $is_kid
     *
     * @return User
     */
    public function setIsKid(bool $is_kid): User
    {
        $this->is_kid = $is_kid;
        return $this;
    }

    /**
     * @return string
     */
    public function getExplicitContentLevel(): string
    {
        return $this->explicit_content_level;
    }

    /**
     * @param string $explicit_content_level
     *
     * @return User
     */
    public function setExplicitContentLevel(string $explicit_content_level): User
    {
        $this->explicit_content_level = $explicit_content_level;
        return $this;
    }

    /**
     * @return array
     */
    public function getExplicitContentLevelsAvailable(): array
    {
        return $this->explicit_content_levels_available;
    }

    /**
     * @param array $explicit_content_levels_available
     *
     * @return User
     */
    public function setExplicitContentLevelsAvailable(array $explicit_content_levels_available): User
    {
        $this->explicit_content_levels_available = $explicit_content_levels_available;
        return $this;
    }

    /**
     * @return string
     */
    public function getTracklist(): string
    {
        return $this->tracklist;
    }

    /**
     * @param string $tracklist
     *
     * @return User
     */
    public function setTracklist(string $tracklist): User
    {
        $this->tracklist = $tracklist;
        return $this;
    }
}